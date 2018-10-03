$(document).ready(function () {
  $.get('https://127.0.0.1:8000/api/v1/provinsi').done(function (data) {
    console.log(data)
  })
})
