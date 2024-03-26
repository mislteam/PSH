export const  formatNumber = (number) => {
   var formatNumber =  parseFloat(number).toLocaleString('en-US', { maximumFractionDigits: 3 })
   return formatNumber;
}

export const extractUSDT = (inputString) => {
   const match = inputString.match(/([A-Z]+)USDT/i); // Match uppercase letters before "USDT"
   
   if (match) {
     return match[1]; // The matched currency symbol
   } else {
     return "Incorrect Format";
   }
 }

 