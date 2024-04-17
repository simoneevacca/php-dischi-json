const { createApp } = Vue

createApp(
    {
        data() {
            return {
                content: [],
            }
        },


        mounted() {
          axios.get('api.php')
          .then(response => {
            this.content = response.data
            console.log(this.content)
          })
        }

        

    }
).mount('#app')

