<template>
    <div id="fn-rest-api-result" :data-result="result">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                result: null,
            }
        },
        mounted() {
            console.log('Fn reset api Component mounted.');
            this.postApi();
        },
        methods: {
            postApi() {
                console.log('Call Api...');
                let vm = this;
                this.$http.get('api/call')
                .then(response => {
                    console.log('Api called : successful')
                    vm.result = response.data.message;
                }).catch(error => {
                    console.log('Api called : Failed with error '+error);
                });
            },
        }
    }
</script>
