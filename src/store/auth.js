import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('userAuth', {

    state : () => { 
        return  {
            token  : null 
        }
    },
    
    actions: {
        async getData(url)
        {
            return await axios.get(process.env.VUE_APP_API_URL+'/'+url, 
            {
                headers: {
                    'Authorization':`Bearer ${localStorage.getItem("token")}`,
                }
            })
            .then(response => {
                return Promise.resolve(response.data)
            })
            .catch(error => {
                console.log(error)
            })
    },
        
        async saveRecord(url, data)
        {
            return  await axios.post(process.env.VUE_APP_API_URL+'/'+url , data )
                .then(response => {
                    this.token = response.data.data.token ;
                    localStorage.setItem('token',  response.data.data.token)
                    return  Promise.resolve(response.data)
                })
                .catch(error => {
                    console.log(error)
                })
        }
        
    }
    
    
});