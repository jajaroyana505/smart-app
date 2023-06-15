const error = $('.flashdata-error').data('flashdata')
const success = $('.flashdata-success').data('flashdata')

if(error){
    Swal.fire({
        icon: 'error',
        title: 'Maaf...',
        text: error,
      })
}
if(success){
    Swal.fire({
        icon: 'success',
        title: 'Berhasil...',
        text: success,
      })
}

// chart

