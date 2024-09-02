$(document).ready(function () {
    // console.log('Login.js is running!')
    console.log('!')
     $('#loginForm').submit(function (e) {
       e.preventDefault()
       var username = $('#username')
         .val()
         .trim()
       var password = $('#password')
         .val()
         .trim()
       var usertype = $('#usertype')
         .val()
         .trim()  
   
       var loginFormSubmittion = {
         username: username,
         password: password,
         usertype: usertype,
       }
       $('#btnLogin').text('Verifying login Details...')
       $.ajax({
         url: 'loginAjax.php',
         type: 'POST',
         data: loginFormSubmittion,
   
         success: function (res) {
           var responseData = JSON.parse(res)
           
           if (responseData.success && responseData.userType ==='asset_manager') {
           window.location.href = 'asset_manager/asset_manager_dashboard.php'
         
           } else  if(responseData.success && responseData.userType ==='ecirs') {
             window.location.href = 'ecirs/ecirs_dashboard.php'
           }
           else  if(responseData.success && responseData.userType ==='dhia_user') {
             window.location.href = 'dhia/dhia_dashboard.php'
           }
           else  if(responseData.success && responseData.userType ==='ict') {
             window.location.href = 'ict_admin/ict_admin_dashboard.php'
           }
           else if(responseData.success && responseData.userType === 'tax_stations'){
             window.location.href = 'tax_stations/tax_stations_dashboard.php';
           }
           else {
            
             $('.alert').show()
             $('#btnLogin').text('Login')
             return false
             
           }
         },
         error: function (err) {
           alert(err, 'error')
           $('#btnLogin').text('Login')
         }
       })
     })
   })
   