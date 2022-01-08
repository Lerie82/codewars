function nextSmaller(n) {
  let myFunc = num => Number(num);
  var intArr = Array.from(String(n), myFunc);
console.log(intArr);

  for(var i=n;i>=0;i--)
  {
    for(var ii=0;ii<intArr.length;ii++)
    {
      if(intArr[ii] == n)
      {
        console.log('found');
      } else {
        console.log(i + ' not found');
      }
    }
  }

  return -1;
}