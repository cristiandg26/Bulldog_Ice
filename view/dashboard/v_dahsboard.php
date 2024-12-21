<?php require_once('view/header.php');?>

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- <img src="vista/resource/img/Logo_ClinalSoftApps.png" class="img-desktop"> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php require_once('view/footer.php'); 

if (isset($_GET["r"]) && $_GET["r"] == "success") {
    echo  "<script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                
                Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                })
            </script>";
}


/*

    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'INICIO EXITOSO',
            showConfirmButton: false,
            timer: 1500
        })
    </script>


    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
  
  
*/


?>

