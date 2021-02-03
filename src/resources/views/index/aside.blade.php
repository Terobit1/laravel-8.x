@section('aside')
<div class="d-flex ">
    <div class="p-2 border  " style=' height: 750px; max-width:200px; '>
        <h4 class=" p-4">Рік видання</h4>
        <div class="mb-2 m-auto pb-3">

            <form action="{{ route('home') }}" method="get">
                <button type="submit" class="btn  btn-block mb-2">Всі роки</button>
            </form>

            <form action="{{ route('1971-1980') }}" method="get">
                <button type="submit" class="btn  btn-block mb-2">1971-1980</button>
            </form>

            <form action="{{ route('1981-1990') }}" method="get">
                <button type="submit" class="btn  btn-block mb-2 ">1981-1990</button>
            </form>

            <form action="{{ route('1991-2000') }}" method="get">
                <button type="submit" class="btn  btn-block mb-2 ">1991-2000</button>
            </form>

            <form action="{{ route('2001-2010') }}" method="get">
                <button type="submit" class="btn  btn-block mb-2 ">2001-2010</button>
            </form>

        </div>

        <h4 class=" p-4">Видавництво</h4>

        <div class=" pb-2" style='padding-left: 23%; '>

            <div class="form-check mb-4">
                <input class="form-check-input" name="group1" type="radio" id="radio-119" value="option1">
                <label class="form-check-label" for="radio-119">Чек бокс</label>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" name="group1" type="radio" id="radio-219" value="option2">
                <label class="form-check-label" for="radio-219">Чек бокс</label>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" name="group1" type="radio" id="radio-319" value="option3">
                <label class="form-check-label" for="radio-319">Чек бокс</label>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" name="group1" type="radio" id="radio-419" value="option4">
                <label class="form-check-label" for="radio-419">Чек бокс</label>
            </div>
            
            <div class="form-check mb-4">
                <input class="form-check-input" name="group1" type="radio" id="radio-519" value="option5">
                <label class="form-check-label" for="radio-519">Чек бокс</label>
            </div>

        </div>



    </div>
