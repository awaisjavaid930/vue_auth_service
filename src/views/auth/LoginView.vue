<template>
    <v-container>
        <v-row justify="space-around">
            <v-card class="px-5" width="400">
                <h3 class="font-weight-bold text-center pb-5" justify="center" size="meduim">
                    <v-img max-height="150" max-width="250" src="@/assets/cycle.gif"></v-img>
                </h3>
                <form @submit.prevent="login">
                
                    <v-text-field v-model="formData.email" label="E-mail"></v-text-field>

                    <v-text-field type="password" dense outlined v-model="formData.password" label="Password">
                    </v-text-field>

                    <v-btn type="submit" color="primary" class="mb-5 mr-4">
                        Login
                    </v-btn>
                    <v-btn to="/register" class="mb-5" depressed color="error">
                        Register
                    </v-btn>
                    
                </form>
            </v-card>
        </v-row>
    </v-container>
</template>
<script>
import { useAuthStore } from '@/store/auth';

export default {
    name: 'LoginView',
    data:() => ({
        formData : {
            email : '',
            password : '' 
        }
    }),
    methods: {
        login()
        {
            const userAuth = useAuthStore();
            console.log(userAuth.getData())
        }
    },
}
</script>