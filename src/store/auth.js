import { defineStore } from 'pinia';

// import axios from 'axios';

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
        }
    }
    
    
});