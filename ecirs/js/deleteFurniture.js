$(document).ready(function () {
    $('#backBtn').click(function (e) { // #backBtn responsible for previous back btn
      e.preventDefault()
      window.location.href = 'viewFurniture.php'
    })
  
    $('#sra-btn').click(function (e) {
      e.preventDefault()
      $(this)
        .html('Please wait...')
        .attr('disabled', 'disabled')
      $('#btn-cancel').attr('disabled', 'disabled')
      var scan_code = $('#scan_code').val()
  
      applicationFormData = {
        transmissionType: 'deleteData',
        scan_code
      }
      
      $.ajax({
        url: 'deleteFurnitureAjax.php',
        type: 'POST',
        data: applicationFormData,
        success: function (res) {
          console.log(res)
          var responseData = JSON.parse(res)
          if (res.error) {
            alert('Error')
            return
          }
         $('#deleteBtn .alert').fadeIn(1000)
          $('#sra-btn').attr('disable', true)
          setTimeout(function () {
            window.location.href = 'viewFurniture.php'
          }, 2000)
        },
        error: function (err) {
          alert(err, 'error')
        }
      })
    })
  })
  

