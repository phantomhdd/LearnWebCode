// Soal 1
// making array
var daftarBuah = ["2. Apel", "5. Jeruk", "3. Anggur", "4. Semangka", "1. Mangga"];
// get each item of array and sorted
// sort
daftarBuah.sort();
// print array
daftarBuah.forEach((data) => {
    console.log(data);
});


// Soal 2
// make string 
var kalimat = "saya sangat senang belajar javascript";
// split the string and insert to array
var array_kalimat = kalimat.split(" ");
// print array
console.log(array_kalimat);


// Soal 3
// make object
function Fruit(name,colour,seed,price) {
    this.name = name;
    this.colour = colour;
    this.seed = seed;
    this.price = price;
}
// define object fruit
var fruit_1 = new Fruit('strawberry','merah','tidak','9000');
var fruit_2 = new Fruit('jeruk','oranye','ada','8000');
var fruit_3 = new Fruit('Semangka','Hijau & Merah','ada','10000');
var fruit_4 = new Fruit('Pisang','Kuning','tidak','5000');
// insert objecto to array
var array_fruit = [fruit_1, fruit_2, fruit_3, fruit_4];
// get first object of array
console.log(array_fruit[0])