/**
 * Created by RedCAT on 2017-04-06.
 */


Vue.component('warning', {
    template: '#err_msg',
    props: ['type'],
});


new Vue({
    el: '.container',
    data: {
        email: '',
        password: '',
        login_fail : false
    },
    methods : {
        login : function(){
            axios.post('/login', this.$data).then(response => {
                let rsp = response.data;
                //console.log(rsp);

                //1, 리턴값이 email 입력 요구일때 : email 경고메세지를 띄운다.
                if(!(rsp.email == null)) { this.$data.email = null; }
                //2. 리턴값이 password 입력 요구일 때 : password 경고 메세지를 띄운다.
                else if(rsp.email == null && rsp.password) { this.$data.password = null; }
                //3. 리턴값이 로그인 실패 일 때 : 로그인 정보 확인 메세지를 띄운다.
                else if(rsp == 'fail') {
                    //alert('done');
                    this.$data.login_fail = true;
                //4. 리턴값이 로그인 성공일 때 : 다음 페이지로 리다이렉팅한다.
                } else if (rsp == 'success') {
                    location.href="main";
                }
            });
        },
    },
});

