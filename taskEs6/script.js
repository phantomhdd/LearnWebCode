// Soal 1
// Mengubah fungsi menjadi fungsi arrow
// const golden = function goldenFunction(){
//     console.log("this is golden!!")
// }

// golden()

const golden = () => console.log("this is new golden")

golden()


// Soal 2
// Sederhanakan menjadi Object literal
// ES5 syntax
// const newFunction = function literal(firstName, lastName){
//     return {
//         firstName: firstName,
//         lastName: lastName,
//         fullName: function(){
//             console.log(firstName + " " + lastName)
//             return 
//         }
//     }
// }

// ES6 syntax
const newFunction = (firstName, lastName) => {
    return {
        firstName,
        lastName,
        fullName: () => {
            console.log(firstName + " " + lastName)
            return 
        }
    }
}
//Driver Code 
newFunction("William", "Imoh").fullName()


// Soal 3
// Destructuring
const newObject = {
    firstName: "Harry",
    lastName: "Potter Holt",
    destination: "Hogwarts React Conf",
    occupation: "Deve-wizard Avocado",
    spell: "Vimulus Renderus!!!"
}

// Destructuring syntax on ES5
// const firstName = newObject.firstName;
// const lastName = newObject.lastName;
// const destination = newObject.destination;
// const occupation = newObject.occupation;

// Destructuring syntax on ES6
const {firstName, lastName, destination, occupation} = newObject;
// Driver code
console.log(firstName, lastName, destination, occupation)


// Soal 4
// Array Spreading
const west = ["Will", "Chris", "Sam", "Holly"]
const east = ["Gill", "Brian", "Noel", "Maggie"]
// Old syntax
// const combined = west.concat(east)

// ES6 syntax
const combined = [...west,...east]
//Driver Code
console.log(combined)


// Soal 5
// Template Literals
const planet = "earth"
const view = "glass"
// Old syntax
// var before = 'Lorem ' + view + 'dolor sit amet, ' + 'consectetur adipiscing elit,' + planet + 'do eiusmod tempor ' + 'incididunt ut labore et dolore magna aliqua. Ut enim' + ' ad minim veniam'

// ES6 syntax
var before = `Lorem ${view}dolor sit amet, consectetur adipiscing elit,${planet}do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam`
// Driver Code
console.log(before)