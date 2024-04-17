const { createApp } = Vue

createApp(
    {
        data() {
            return {
                content: [],
            }
        },


        mounted() {
          axios.get('dischi.json')
          .then(response => {
            this.content = response.data
            console.log(this.content)
          })
        }

        

    }
).mount('#app')

