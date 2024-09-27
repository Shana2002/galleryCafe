const navBtn = document.querySelectorAll('.nav-btn');
const cont1 = document.querySelectorAll('.sub-content-1');
const cont2 = document.querySelectorAll('.sub-container-2');
const data1 = {
  labels: [
    'Sales',
    'Complains',
    'Return'
  ],
  datasets: [{
    data: [300, 50, 100],
    backgroundColor: [
      '#D7F7DC',
      'rgb(54, 162, 235)',
      'rgb(255, 99, 132)'
    ],
    hoverOffset: 4
  }]
};
new Chart("pieChart", {
  type: "doughnut",
  data: data1,
});

var xValues = ["1", "2", "3", "4", "5", "6", "7"];
// var yValues = [55, 49, 20, 24, 45, 30, 20];
var barColors = ["#D7F7DC", "#D7F7DC", "#D7F7DC", "#D7F7DC", "#D7F7DC", "#D7F7DC", "#D7F7DC",];

new Chart("barChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: { display: false },
    title: {
      display: false,
      text: "Weekly Sales"
    }
  }
});

navBtn.forEach((btn, index) => {
  btn.addEventListener('click', () => {
    navBtn.forEach(btn => { btn.classList.remove('active-nav') });
    btn.classList.add('active-nav');
    cont1.forEach(content1 => { content1.classList.remove('active-1') });
    cont1[index].classList.add('active-1');
    cont2.forEach(content2 => { content2.classList.remove('active-2') });
    cont2[index].classList.add('active-2');
  })
})

function tabChange(index) {
  navBtn.forEach(btn => { btn.classList.remove('active-nav') });
  cont1.forEach(content1 => { content1.classList.remove('active-1') });
  cont2.forEach(content2 => { content2.classList.remove('active-2') });
  navBtn[index].classList.add('active-nav');
  cont1[index].classList.add('active-1');
  cont2[index].classList.add('active-2');
}
function toggleItems(billId) {
  var itemsRow = document.getElementById('items-' + billId);
  if (itemsRow.style.display === 'none' || itemsRow.style.display === '') {

      itemsRow.style.display = 'table-row';
      
      setTimeout(() => {
           // Hide after animation completes
          itemsRow.classList.add('expanded');
      }, 10);

  } else {
      itemsRow.style.display = 'none';
  }
}