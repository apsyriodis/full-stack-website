<template>
    <div class="container bg-gray-200 rounded-xl">
        <h2 class="text-center p-2 text-white bg-dark rounded-md">Contacts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody v-for="contact in contacts" :key="contact.id">
                <tr>
                    <td scope="row">{{ contact.id }}</td>
                    <td scope="row">{{ contact.name }}</td>
                    <td scope="row">{{ contact.email }}</td>
                    <td scope="row">{{ contact.designation }}</td>
                    <td scope="row">{{ contact.contact_no }}</td>
                    <td>
                        <router-link :to="{ name:'edit_contact', params: {id:contact.id}}" class="btn btn-primary btn-sm">Edit</router-link>
                        <button class="btn btn-danger btn-sm" v-on:click.prevent="deleteContact(contact.id)">Delete</button>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Contact',
    
    data() {
        return {
            contacts: [],
        }
    },

    created() {
        this.loadData();

        this.mounted(); // optional
    },

    methods: {
        loadData(){
            let url = 'http://127.0.0.1:8000/api/get_contacts';
            axios.get(url)
                .then(response => {
                this.contacts = response.data;
                console.log(this.contacts); // optional
            });
        },

        mounted() { // optional
            console.log('Contact List Component Mounted');
        },

        deleteContact(id) {
            let url = `http://127.0.0.1:8000/api/delete_contact/${id}`;
            axios.delete(url)
            .then(response => {
                if(response.status){
                    this.loadData();
                    this.$utils.showSuccess('Success!', response.message);
                }
                else{
                    this.$utils.showError('Error!', response.message);
                }
            });

        },

        handleEdit(index, row) {
            console.log(index, row);
         },

        handleDelete(index, row) {
            console.log(index, row);
        }

        // data() {
        //     return {
        //         url: document.head.querySelector('meta[name="url"]').content,
        //         contacts:[]
        //     }
        // }
    },
}
</script>
