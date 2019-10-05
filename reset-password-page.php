<?php 
error_reporting(0);
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");

$validated = false;
$file_content = file_get_contents('password_reset_temp.json'); 
$forgot_db = json_decode($file_content);   

foreach ($forgot_db as $user) { 
    if ($user->email == $email && $user->key ==  $key ) {
      
      $validated = true;



    }
  }


}

if( $validated == false){
  $error .= 'Invalid Link. The link is invalid/expired. Either you did not copy the correct link from the email, or you have already used the key in which case it is deactivated. ';

 header('Location: forgot-password.php?msg='.$error);

  
}

 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" as="style" rel="preload" onload="this.rel='stylesheet'"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" as="style" rel="preload" onload="this.rel='stylesheet'">
    
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />




    
    <link rel="stylesheet" href="forgot-password.css" />
  </head>
  <body>
    <div class="container" id="app">
      <div class="card card1">
        <div class="card-body">
          <div id="title">
            <img
              src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1569341483/Team%20Nemesis_twitterBot/twitter_icon_pzp2pk.svg"
              alt="twitter logo"
            />
            <h3>Nemesis Tweetbot</h3>
          </div>
          <h2>Reset your password!!!</h2>
          
          <p class="text-center" style="font-size:13px;color:#848d94;">{{msg}}</p>
                 
          
          
          <form id="processreset" method="post" action="processreset.php" >
          <v-form ref="processreset">
          <div class="form-control-lg">
          <!-- <v-row class="d-flex flex-row justify-center mt-3">
          <v-text-field name="email" v-model="email"
             :rules="emailRules" outlined  label="email"
              placeholder="Email" disabled  ></v-text-field>
              </v-row> -->
 

              <v-text-field
            v-model="password"
            :append-icon="show1 ? 'visibility' : 'visibility_off'"
            :rules="passwordRules"
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            label="New Password" 
            counter
            @click:append="show1 = !show1"
          ></v-text-field>

          <!-- <v-text-field
            v-model="password2"
            :append-icon="show2 ? 'visibility' : 'visibility_off'"
            :rules="passwordMatch"
            :type="show2 ? 'text' : 'password'"
            name="input-10-1"
            label="Retype Password" 
            counter
            @click:append="show2 = !show2"
          ></v-text-field>
  -->
              <!-- <v-row class="d-flex flex-row justify-center mt-3">
            <v-text-field name="password" v-model="password"
             :rules="passwordRules" outlined  label="Password"
              placeholder="Enter new password"  required></v-text-field> -->
          </div>
          </v-row>
          <br/><br/>  
          <div class="form-group my-5"> 
          <v-btn @click="processReset" class="ma-2" color="#39a2e4" dark>Reset Password</v-btn>
         
          </div>
            <!-- <input
              
              name="submit_email"
              class="btn btn-lg"
              value="Reset Password"
              type="button"
              data-toggle="modal"
              @click="processForgot" 
              data-target="#exampleModalCenter"
            /> -->
     
          </v-form>
          </form>


        </div>
      </div>
      <div class="card card2">
        <div class="card-body">
        <div class="card-body">
          <img src="https://res.cloudinary.com/dzwnhcpep/image/upload/v1570186050/Team%20Nemesis_twitterBot/forgot-password_pcporg.svg" alt="forgot password" />
        </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div style="text-align: center;" class="modal-content">
          <!-- <div style="font-size: 23px; margin: 1em;" class="modal-body">
            <!-- Email sent successfully. Please check your inbox. -->
          <!--</div> -->
        </div>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/2534cfc66b.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
     


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                msg: "",
                loading: false, 
                show1: true, 
                show2: true,
                password: "", 
                password2:"",
                email: "<?php echo $email ?>",
                emailRules: [
                    v => /^([\w\d\.]+)@([\w]{2,6})\.([\w]{2,5})(\.[\w]{2,4})?$/g.test(v) || 'must be a valid email address'
                ],
                passwordRules: [
                    v => /[a-z]+/.test(v) || "must contain lowercase alphabets",
                    v => /[A-Z]+/.test(v) || "must contain uppercase alphabets",
                    v => /[\d]+/.test(v) || "must contain numbers",
                ],
                passwordMatch: [ v =>  (this.password == this.password2)  || 'Password does not match'],
                
            },
            methods: {
                
                processReset: function() { 
                    if (this.$refs.processreset.validate()) { 
                        this.loading = true;
                        const form = document.getElementById('processreset');
                        $.ajax({
                            type: "post",
                            //url: "http://localhost/Team-Nemesis-Task5/Team-NEMESIS/processreset.php",
                            url: "//nemesis-twitterbot.herokuapp.com/processreset.php",
                            data: { 
                                "email": this.email,
                                "password": this.password
                            },
                            dataType: "json",
                            success: function(response) {
                                console.log(app);
                                app.msg = response.msg;
                            },
                            error: function(xhr, err) {
                                console.log(xhr);
                            },
                        });
                        this.loading = false;

                    }
                },
            },
            computed: {

            },
        });
    </script>


  </body>
</html>
<!-- name="recover-submit"  -->