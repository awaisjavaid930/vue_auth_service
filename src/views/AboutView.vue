<template>
  <div class="about">
    <h1>This is an about page</h1>
  </div>
</template>
<script>
    
    import { useAuthStore } from '@/store/auth';
    export default {
        name : 'AboutView',
        data() {
            return {
                        
            }
        },
        methods: {
            getData()
            {
                const userAuth = useAuthStore();   
                userAuth.getData('user')
                .then(response => {
                    console.log(response.data)
                })
                .catch(error => {
                    console.log(error)
                })
            }
        },
        mounted() {
            this.getData();
        },
    }
</script>