@extends('layouts/user')
@section('dash')

    <div class="pr-5">
        <div class="row ">
            <div class="col-11">
                 <grafi-component/>
            </div>
        </div>
        <div class="row d-flex p-2 bd-highlight">
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
                <block-chard></block-chard>
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
                <interv-component/>
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
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
<script>
    import InterventionsChart from "../../js/components/interventionsChart";
    export default {
        components: {InterventionsChart}
    }
</script>