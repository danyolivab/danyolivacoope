<template>

    <input type="submit"
    class="btn btn-danger btn-sm"
    value="Elim"
    @click="eliminarAfiliado"
    >

</template>

<script>
export default {
    name: 'Eliminar',
    props: ['afiliadoId'],
    methods: {
        eliminarAfiliado(){
                this.$swal({
                title: 'Estas seguro que deseas eliminar?',
                text: "Esta acción no se podrá revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'SI',
                cancelButtonText: 'NO'
                }).then((result) => {
                    if (result.value) {



                    }
                })
        }
    }
}
</script>
