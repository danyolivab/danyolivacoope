<template>
    <div>

    </div>
</template>

<script>
export default {
    components:{
        OperacionExitosa
    },
    mounted(){
        this.$swal({
            position: 'top-end',
            icon: 'success',
            title: 'Operación exitosa',
            showConfirmButton: false,
            timer: 1500
        })
    }
}
</script>

