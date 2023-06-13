@if (session('success'))
<base href="{{asset('backend')}}">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<div class="success-message" id="success-message">
    <div class="text-message">
        <h5><i class="fa-sharp fa-light fa-triangle-exclamation"></i>Thông báo:</h5>
        <p><br>{{session('success')}}</p>
    </div>
</div>
<style>
    @keyframes slide-in {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(0);
    }
    }
    .success-message{
        position: absolute;
        right: 10px;
        top:60px;
        width: 200px;
        height: 120px;
        background-color: #17a2b8;
        border-radius: 4px;
        color: #fff;
        opacity: 0.6;
        animation: slide-in 0.3s ease-out;
        z-index: 1000;
    }

    .text-message{
        margin: 10px;
    }

    .text-message p{
        position: absolute;
        top:20px;
    }

</style>
<script>
    setTimeout(function() {
      var errorMessage = document.getElementById('success-message');
      errorMessage.style.opacity = '0';
      setTimeout(function() {
        errorMessage.parentNode.removeChild(errorMessage);
      }, 500);
    }, 3000);
</script>
@endif
