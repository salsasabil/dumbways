console.clear()
function count(date, money){
  var duit = parseInt(money)
  var eggs = duit/2500
  var bonus = 0
  var isPrima = date < 2 ? false : true
  if(eggs=>12){
    var amountBonusPerLusin = eggs/12
    for(i=2; i<date; i++){
      if(date%i==0){
        isPrima = false
      }
    }
    if(isPrima){
      //hadia perlusin 2 jika prima
      bonus = amountBonusPerLusin*2
    }else{
      if(date%2 == 1){
        //hadiah perlusin tgl ganjil tapi bukan prima
        bonus = amountBonusPerLusin*3
      }
    }
    if(date%5==0){
      if(bonus%2==0){
        //jika tanggal genap
        bonus = bonus*10
      }else{
        //jika tanggal ganjil
        bonus = bonus*5
      }
      
    }
  }
  eggs = eggs +bonus
  console.log(eggs)
}

count(3,30000)