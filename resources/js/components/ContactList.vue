<template>
    <div class="container bg-gray-200 p-3 rounded-xl">
        <h2 class="text-center p-2 text-white bg-dark rounded-md">Contacts</h2>

        <el-table :data="contacts" style="width: 100%">
            <el-table-column width="40px" label="#" prop="id"> </el-table-column>
            <el-table-column width="190px" label="Name" prop="name"> </el-table-column>
            <el-table-column width="190px" label="Email" prop="email"> </el-table-column>
            <el-table-column width="190px" label="Designation" prop="designation"> </el-table-column>
            <el-table-column width="150px" label="Contact Number" prop="contact_no"> </el-table-column>

            <el-table-column align="right">
                <template slot-scope="props">
                    <router-link size="mini"  :to="{ name:'edit_contact', params: {id:props.row.id}}" class="btn btn-primary btn-sm">Edit</router-link>
                    <el-popconfirm 
                    title="Are you sure to delete this?" 
                    confirmButtonText="Yes" c
                    cancelButtonText="Cancel"
                    @confirm="handleDelete(1,props.row)">
                        <el-button slot="reference" size="mini" type="danger" class="p-2 btn btn-danger btn-sm">Delete</el-button>
                    </el-popconfirm>
                </template>
            </el-table-column>
        </el-table>

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

        handleDelete(index, row) {
            this.id = row.id;

            let url = `http://127.0.0.1:8000/api/delete_contact/${row.id}`;
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
        }
    },
}
</script>
