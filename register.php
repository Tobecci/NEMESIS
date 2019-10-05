<?php
// if (!session_id()) {
//     session_start();
// }
// if (isset($_SESSION['logged_in'])) {
//     header('Location: dashboard.php');
// }
// header('Location: signin.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui"> 
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nemesis Twitter Bot Landing Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
  <style>
      @import url("https://fonts.googleapis.com/css?family=Fugaz+One|Lato:400,700|Montserrat:400,700&display=swap");
  </style>
</head>

<body>
        <div id="app" >
            <v-app >
                   <!-- style="background-color: rgba(29, 161, 242, 0.4);"  -->
                   <v-row>
                       <v-col cols="12" xl="6"  md="6" xs="12" sm="12" lg="6" style="background-color: rgba(29, 161, 242, 0.4);">
                           <v-container>
                    <v-card color="transparent" flat class="mx-auto pa-3" max-width="500px" style="border-radius: 10px;">
                        <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <img  src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1569341483/Team%20Nemesis_twitterBot/twitter_icon_pzp2pk.svg" alt="">
                            </v-col>
                           </v-row>
                        <v-row class="d-flex flex-column justify-center align-center">
                    <div
                    :class="{'ml-12': $vuetify.breakpoint.mdAndDown}" 
                    style="font-family: Fugaz One; font-size: 45px;" >Nemesis Tweetbot</div>
                        </v-row>
                        <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <img  src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1569341619/Team%20Nemesis_twitterBot/wifi_icon_mjyfgk.svg" alt="">
                            </v-col>
                           </v-row>
                           <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <div>connect twitter account</div>
                            </v-col>
                           </v-row>

                           <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <img  src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1569341614/Team%20Nemesis_twitterBot/download_icon_njf4hm.svg" alt="">
                            </v-col>
                           </v-row>
                           <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <div>Save Tweet directly from twitter to external drive</div>
                            </v-col>
                           </v-row>

                           <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <img  src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1569341616/Team%20Nemesis_twitterBot/file_icon_a8sddq.svg" alt="">
                            </v-col>
                           </v-row>
                           <v-row class="">
                            <v-col class="d-flex flex-row justify-center">
                                <div>Enjoy viewing favorite tweet on external drive at leisure</div>
                            </v-col>
                           </v-row>
                            
                    </v-card>
                </v-container>
                       </v-col>

                       <v-col xs="12" sm="12" md="6" lg="6" xl="6" cols="12" class="d-flex flex-column justify-center align-center">
                           <v-card  class="d-flex flex-column justify-center align-center pa-3" min-width="400px">
                                <v-card-title class="text-center">Create an account</v-card-title>
                                <v-container>
                                    <v-form action="register.php" method="post">
                                    <v-text-field name="name" outlined color="blue" label="Username" placeholder="enter your username" count="10"></v-text-field>
                                      <v-text-field name="email" type="email" outlined color="blue" label="Email" placeholder="enter your email address" count="10"></v-text-field>
                                    <v-text-field name="password" type="password" outlined label="Password" placeholder="enter your Password" color="blue" count="10"></v-text-field>
                                    <v-text-field type="password" outlined label="Confirm Password" placeholder="enter your Password again" color="blue" count="10"></v-text-field>
                                    <v-row class="d-flex flex-row justify-center">
                                        <v-btn type="submit"  color="#39a2e4" dark min-width="300px">Create Account</v-btn>
                                    </v-row>
                                    </v-form>
                                    <v-row class="d-flex flex-row justify-center mt-3">
                                        <v-btn min-width="300px" color="#39a2e4" dark>Sign in with twitter</v-btn>
                                    </v-row>
                                    <v-row class="d-flex flex-row justify-center mt-3">
                                        <div class="ma-2">have an account?</div>
                                        <v-btn class="ma-2" color="#39a2e4" dark>Sign in</v-btn>
                                    </v-row>
                                </v-container>
                           </v-card>

                       </v-col>
                   </v-row>
            </v-app>
        </div>




  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
        <script>
            var app = new Vue({
                el:'#app',
                vuetify: new Vuetify(),
                data: {
                    msg : "hello",
                },
                methods: {

                },
                computed:{

                },
            });
        </script>
    </div>
</body>

</html>