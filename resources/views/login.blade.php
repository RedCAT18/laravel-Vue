<?php
/**
 * Created by PhpStorm.
 * User: RedCAT
 * Date: 2017-04-05
 * Time: 오후 10:15
 */
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">


        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>
    <body id="login_bg">
        <div class="container">
            <div class="login_box col-md-4 col-md-offset-4 no-padding">
                <div class="login_form">
                    <div class="login_title row">
                        <div class="col-md-9">
                            <h3>Member Login</h3>
                            <p>발급받은 아이디와 패스워드를 입력해 주세요.</p>
                        </div>
                        <div class="col-md-3 login_icon">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="login_sect">
                        <div class="form-group">
                            <input v-model="email" name="email" type="email" class="form-control" id="login_email" placeholder="로그인 아이디">
                            <warning v-if="!email" type="아이디"></warning>
                        </div>
                        <div class="form-group">
                            <input v-model="password" type="password" name="password" class="form-control" id="login_password" placeholder="비밀번호">
                            <warning v-if="!password" type="패스워드"></warning>
                        </div>

                        <p v-if="login_fail" class="login_warning">로그인 정보를 확인해주세요.</p>
                        <button type="submit" class="btn btn-block btn-design" @click="login">로그인하기</button>
                        <input type="checkbox" class="login_check"> 내 아이디 기억하기
                    </div>
                </div>
                <div class="find_pw">
                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    <span>비밀 번호를 잊으셨습니까?</span>
                </div>
            </div>
        </div>

        <template id="err_msg">
            <p class="login_warning">@{{ type }}를 입력해주세요.</p>
        </template>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
    <script src="/js/app.js"></script>
</html>
