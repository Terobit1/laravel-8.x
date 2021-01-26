@section('aside')
<div class="d-flex "  >
  <div class="p-2 border " style=' height: 900px; padding: 10px;'>
    <h4 style='padding: 24px;'>Рік видання</h4>
    <div style=' padding-bottom: 24px; margin:auto; margin-bottom:10px;'>
          <form action="{{ route('home') }}" method="get">
          <button type="submit" class="btn btn-dark btn-block ">All</button>
          </form>

          <form action="{{ route('1971-1980') }}" method="get">
          <button type="submit" class="btn btn-dark btn-block ">1971-1980</button>
          </form>
         
          <form action="{{ route('1981-1990') }}" method="get">
          <button type="submit" class="btn btn-dark btn-block ">1981-1990</button>
          </form>
          
          <form action="{{ route('1991-2000') }}" method="get">
          <button type="submit" class="btn btn-dark btn-block ">1991-2000</button>
          </form>
          
          <form action="{{ route('2001-2010') }}" method="get">
          <button type="submit" class="btn btn-dark btn-block ">2001-2010</button>
          </form>
          

        
          
          </div>
    <h4 style='padding: 24px;'>Видавництво</h4>
    <div style='padding-left: 23%; padding-bottom: 24px;'>
          <div class="form-check mb-4" >
            <input class="form-check-input" name="group1" type="radio" id="radio-119" value="option1">
            <label class="form-check-label" for="radio-119">Very good</label>
          </div>

          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-219" value="option2">
            <label class="form-check-label" for="radio-219">Good</label>
          </div>

          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-319" value="option3">
            <label class="form-check-label" for="radio-319">Mediocre</label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-419" value="option4">
            <label class="form-check-label" for="radio-419">Bad</label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-519" value="option5">
            <label class="form-check-label" for="radio-519">Very bad</label>
          </div>
          </div>
  
  
  
  </div>
  