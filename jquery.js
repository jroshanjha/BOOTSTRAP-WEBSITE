$(document).ready(function(){
    $(".query").validate(


               {

rules:{
    username:'required',
    email:'required',
    password:'required',
    gender:'required',
    address:'required'

},
messages:{
    username:'Please Enter your fullname',
    email:'Please Enter your Email ID',
    password:'Pleaser Enter your password',
    gender:'Please click atleast one gender',
    address:'Pleaser Enter conform your addresss'


 }

             }
    );
    });

// $(document).ready(function(){
//     $(".query").validate(
//         {
//             rules: {
//                 username:"required",
//                 email:{
//                     required:true,
//                     email:true
//                 },
//                 gender:"required",
//                 course:"required",
//                 phone:{
//                 required:true,
//                 minlength:10,
//                 maxlength:10,
//                 },
//                 password:
//                 {
//                     required:true,
//                     minlength:8,
//                     maxlength:15
//                     },
//                 cpassword:'required',
//                 address:"required"
        
//             },
//             messages:{
//                 username:"please Enter your username",
//                 email:{
//                 required: "Plese Enter your email ID",
//                 email:"Please Enter valide your email ID"
//             },
//                 gender:"please Enter your gender",
//                 course:"Please Enter your course",
//                 phone:
//                 {
//                     required:"Please enter your correct phone number",
//                     minlength:"Please enter atleast 10 charactor",
//                     maxlength:"Please enter only 10 charactor"
//                 },
//                 password:
//                 {
//                     required:"Pleaser enter your password",
//                     minlength:"Please enter atleast 8 charactor",
//                     maxlength:"Please enter only 15 charactor"},
//                 cpassword:"please enter your conform password",
//                 address:"Please Enter your address"
        
//             } 
//         }
//     );
// });




// JQuery("#vali").validate({
//     rules: {
//         username:"required",
//         email:"required",

//     },
//     messages:{
//         username:"please Enter your username"

//     }

// });


// <!-- Button trigger modal -->
// <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
//   Launch demo modal
// </button>

// <!-- Button trigger modal -->
// <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
//   Launch demo modal
// </button>