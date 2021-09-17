<template>
    <div class="container bg-gray-200 rounded-xl">
        <h2 class="text-center p-2 text-white bg-dark rounded-md">Edit Contact</h2>
        <div class="card-body">
            <form id="validateForm" @submit.prevent="updateContact" enctype="multipart/form-data" novalidate>
                <div class="alert alert-danger" v-if="errors.length">
                    <ul class="mb-0">
                        <li v-for="(error, index) in errors" :key="index">
                            {{ error }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 offset-md-3 mb-3">
                    <div class="form-group">
                        <label class="mb-2 ml-1" for="">Name</label>
                        <input placeholder="Enter Name" type="text" id="name" v-model="contact.name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 mb-3">
                    <div class="form-group">
                        <label class="mb-2 ml-1" for="">Email</label>
                        <input placeholder="Enter Email" type="email" id="email" v-model="contact.email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 mb-3">
                    <div class="form-group">
                        <label class="mb-2 ml-1" for="">Contact Number</label>
                        <input placeholder="Enter Contact Number" type="text" id="contact_no" v-model="contact.contact_no" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 mb-3">
                    <div class="form-group">
                        <label class="mb-2 ml-1" for="">Designation</label>
                        <input placeholder="Enter Destination" type="text" id="designation" v-model="contact.designation" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 mb-3">
                    <div class="form-group">
                        <label class="mb-2 ml-1" for="">Biography</label>
                        <textarea placeholder="Enter Biography" type="text" id="bio" v-model="contact.bio" class="form-control"></textarea>
                    </div>
                </div>
                <div class="custom-file col-md-6 offset-md-3 mt-6">
                    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" v-on:change="updateImage">
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                </div>
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-primary mt-4 mb-2">Submit</button>
                </div>

            </form>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            // url: document.head.querySelector('meta[name="url"]').content,
            contact:{},
            name:'',
            email:'',
            bio:'',
            designation:'',
            contact_no:'',
            errors: [],
        }
    },

    created() {
        this.loadData();
    },

    methods: {
        loadData(){
            let url = `/api/edit_contact/${this.$route.params.id}`;
            axios.get(url)
                .then((response) => {
                    this.contact = response.data;
                    console.log(this.contact);
                });
        },

        updateContact() {
            this.errors = []; // ώστε να αδειάζει κάθε φορά που πατάμε εκ νέου submit
            if(!this.contact.name) {
                this.errors.push('Name is required!');
            }
            if(!this.contact.email) {
                this.errors.push('Email is required!');
            }
            if(!this.contact.bio) {
                this.errors.push('Biography is required!');
            }
            if(!this.contact.designation) {
                this.errors.push('Designation is required!');
            }
            if(!this.contact.contact_no) {
                this.errors.push('Contact number is required!');
            }
            if (!this.errors.length) {
                let formData = new FormData();
                formData.append('name', this.contact.name);
                formData.append('email', this.contact.email);
                formData.append('contact_no', this.contact.contact_no);
                formData.append('bio', this.contact.bio);
                formData.append('designation', this.contact.designation);
                // formData.append('image', this.image); //bug
                let url = `/api/update_contact/${this.$route.params.id}`;
                axios.post(url, formData)
                .then((response) => {
                    if(response.status){ // αδειάζει τη φόρμα, αφότου ανέβουν τα δεδομένα στη ΒΔ
                        this.$utils.showSuccess('Success!', response.message);
                        this.$router.push({
                            name: '/'
                        });
                    }
                    else{
                        this.$utils.showError('Error!', response.message);
                    }
                })
                .catch(error => {
                    this.errors.push(error.response.data.error);
                });
            }
        },

        updateImage(e){
            this.image = e.target.files[0];
            console.log(this.image);
        }
    }, 

    mounted: function () { // optional
        console.log('Edit Contact Component Loaded');
    },
}
</script>
