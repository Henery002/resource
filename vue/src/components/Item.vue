<template>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    {{data.title}}
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="row">
                    <my-component v-for="list in data.lists" :item="list"></my-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import MyComponent from './MyComponent'
    export default {
        props: ["data"],
        components: {
            MyComponent
        }
    }
</script>