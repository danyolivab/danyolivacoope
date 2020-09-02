<template>
    <div>

    </div>
</template>

<script>
export default {
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

