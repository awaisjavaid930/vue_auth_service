<template>
    <v-container>
        <v-row align="right" justify="space-around" class="float-right">
            <v-btn to="/register" depressed color="primary" class="float-right mx-2">
                Register
            </v-btn>
            <v-btn to="/login" depressed color="primary" class="float-right mx-2">
                Login
            </v-btn>
        </v-row>
    </v-container>
</template>

<script>

export default {
    name: 'HelloWorld',

    data: () => ({
        ecosystem: [
            {
                text: 'vuetify-loader',
                href: 'https://github.com/vuetifyjs/vuetify-loader/tree/next',
            },
            {
                text: 'github',
                href: 'https://github.com/vuetifyjs/vuetify/tree/next',
            },
            {
                text: 'awesome-vuetify',
                href: 'https://github.com/vuetifyjs/awesome-vuetify',
            },
        ],
        importantLinks: [
            {
                text: 'Chat',
                href: 'https://community.vuetifyjs.com',
            },
            {
                text: 'Made with Vuetify',
                href: 'https://madewithvuejs.com/vuetify',
            },
            {
                text: 'Twitter',
                href: 'https://twitter.com/vuetifyjs',
            },
            {
                text: 'Articles',
                href: 'https://medium.com/vuetify',
            },
        ],
        whatsNext: [
            {
                text: 'Explore components',
                href: 'https://vuetifyjs.com',
            },
            {
                text: 'Roadmap',
                href: 'https://vuetifyjs.com/introduction/roadmap/',
            },
            {
                text: 'Frequently Asked Questions',
                href: 'https://vuetifyjs.com/getting-started/frequently-asked-questions',
            },
        ],
    }),
}
</script>
