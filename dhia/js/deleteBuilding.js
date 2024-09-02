$(document).ready(function () {
  // #backBtn responsible for previous back btn
    $('#backBtn').click(function (e) { 
      e.preventDefault()
      window.location.href = 'viewBuilding.php'
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
        url: 'deleteBuildingAjax.php',
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
            window.location.href = 'viewBuilding.php'
          }, 2000)
        },
        error: function (err) {
          alert(err, 'error')
        }
      })
    })
  })
  

