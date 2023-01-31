import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('userAuth', {

    state : () => { 
        return  {
            token  : null 
        }
    },
    
    actions: {
        async getData()
        {
            return "dfd";
        },
        
        async saveRecord(url, data)
        {
            return  axios.post(process.env.VUE_APP_API_URL+'/'+url , data )
                .then(response => {
                    return  Promise.resolve(response.data)
                })
                .catch(error => {
                    console.log(error)
                })
        }
        
    }
    
    
});