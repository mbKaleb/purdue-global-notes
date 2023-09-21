
let name = "John Smith"
let address = "101 N. Main Street"
let city = "AnyTown"
let state = "TX"
let unitsTaken = "19" //1

const pricePerUnit = 100.50 //2
const twentyUnitHrDiscount = 150 //3

let unitsTakenInt = parseInt(unitsTaken) //4
unitsTakenInt++ //5

const tuition = pricePerUnit * unitsTakenInt //6

const afterDiscount = (tuition - twentyUnitHrDiscount) //7

let monthlyPayment = (afterDiscount/12) //8

document.write(`
    <div>
        Name: ${name} <br/>
        Address: ${address} <br/>
        City: ${city} <br />
        State: ${state} <br/>
        Zip Code: ${"11111"} <br/>
        Number of units taken: ${unitsTakenInt} <br/>
        Tuition before discount: $${tuition.toFixed(2)} <br/>
        Tuition after discount: $${afterDiscount.toFixed(2)} <br/>
        Monthly Payment: $${monthlyPayment.toFixed(2)} <br/>
    </div>
`) //9