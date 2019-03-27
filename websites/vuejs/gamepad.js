Vue.use(VueGamepad);
new Vue({
    data: {
        isOpen: false,
        okText: {
            a: 'Ok-A',
            y: 'Ok-Y',
            x: 'Ok-X'
        }
    },
       methods: {
        press() {
            this.okText.a = 'Ok Pressed!';
            this.okText.y = 'Ok Pressed!';
            this.okText.x = 'Ok Pressed!';
        },
        close() {
            this.okText.a = 'Ok-A';
            this.okText.y = 'Ok-Y';
            this.okText.x = 'Ok-X';
            this.isOpen = false;
        },
    },
}).$mount('#app');