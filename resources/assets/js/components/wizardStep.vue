<template>

    <div role="tabpanel" class="tab-pane">


    </div>


</template>

<script>
    import voca from 'voca';
    export default {

        props: {

            title: {
                type: String,
                required: true
            },
            active: {
                type:[Boolean,String],
                default:false
            }
        },
        computed: {
            id: function () {
                return voca.latinise(voca.camelcase(this.title))
            },
            link: function () {
                return '#' + this.id
            }
         },
        mounted() {
            console.log('wizard-step done')
        }
    }

</script>
