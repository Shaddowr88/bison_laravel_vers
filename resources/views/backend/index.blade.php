@extends('layouts/dash')
@section('dash')

    <div >
        <div class="row ">
            <div class="col-12">
                 <grafica-component></grafica-component>
            </div>
        </div>
        <div class="row ">
            <div class="card col-3 m-2">
                <block-chard></block-chard>
            </div>
            <div class="card col-3 m-2">
                <interv-chard-component></interv-chard-component>
            </div>
            <div class="card col-3 m-2">
                <block-chard></block-chard>
            </div>
        </div>
    </div>
@endsection

<script>
    import BlocChartIntervention from "../../js/components/blocChartIntervention";
    export default {
        components: {BlocChartIntervention}
    }
</script>
<script>
    import InterventionsChart from "../../js/components/interventionsChart";
    export default {
        components: {InterventionsChart}
    }
</script>
<script>
    import BlocChartIntervention from "../../js/components/blocChartIntervention";
    export default {
        components: {BlocChartIntervention}
    }
</script>
