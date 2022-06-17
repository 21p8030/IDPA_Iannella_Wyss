<?php
/* Smarty version 4.1.0, created on 2022-06-17 14:51:08
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\integral.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ac78bc1b7031_47081361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e42c6c44df7edcc0b3314d2efcb47b05a7e894' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\integral.smarty',
      1 => 1655470243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac78bc1b7031_47081361 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    window.onload = function() {
        console.log("Test");
        // Variables
        const resultRct = document.querySelector('.result-rect');
        const chartMsg = document.querySelector('.chart-info');
        const results = document.querySelector('.results');
      
        const cbInput = document.querySelector('.input-cb');
        const rangeInputFrom = document.querySelector('.input-range-from');
        const rangeInputTo = document.querySelector('.input-range-to');
        const stepInput = document.querySelector('.input-step');
      
        //const btn = document.querySelector('.btn');
        const btn = document.getElementById('btn');
        

        
        let isChartCreated = false;
        
        // Chart variables
        let canvas = document.getElementById('myChart');
        let ctx = canvas.getContext('2d');
        
        
        let chartData = [];
        let myLabels = [];
      
        // Functions
      
        const createChart = inp => {
          const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    type: 'line',
                    label: `f(x) = ${inp.value}`,
                    backgroundColor: 'transparent',
                    borderColor: '#ff7400',
                    data: []
                }, {
                    label: 'Rectangle rule',
                    borderColor: changeBarChartColor().barBorderColors,
                    borderWidth: '2',
                    backgroundColor: changeBarChartColor().barColors,
                    data: []
                              
                }]
            },
            options: {
              scales: {
                xAxes: [{
                    barPercentage: 1,
                    categoryPercentage: 1,  
                }],
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              },
              legend: {
                  labels: {
                      generateLabels: function(chart) {
                      labels = Chart.defaults.global.legend.labels.generateLabels(chart);
                      // let gradient = ctx.createLinearGradient(0, 0, 170, 0);
                      // gradient.addColorStop(0, '#62c462');
                      // gradient.addColorStop(1, '#ff5252');
      
                      labels[1].fillStyle = '#62c462';
                      return labels;
                    }
                  }
              }
            }
          });
          
          return myChart;
        };
      
        const addChartData = (chart, labelArr, data) => {
          chart.data.labels = labelArr;
          chart.data.datasets.forEach(dataset => dataset.data = data);
          chart.update();
        };
      
        const removeChartData = () => {
          myLabels = [];
          chartData = [];
        };
      
        const changeBarChartColor = () => {
          // different rectangle color for positive and negative values
          const barColors = chartData.map(item => item.y > 0 ? '#62c462' : "#ff5252");
          const barBorderColors = chartData.map(item => item.y > 0 ? '#62c462' : "#ff0000");
          return {
            barColors,
            barBorderColors
          }
        };
      
        const roundResult = result => math.round(result, 3);
      
        const integrateRct = (fn, step, start, end) => {
          // clear chart data
          removeChartData();    
      
          let sumRct = 0;
          for (let i = start; i <= end; i += step) {
            if (fn(i) == Infinity || -Infinity) {
              i = i + step / 100;
            }
            if (i <= end - step) sumRct = math.add(sumRct, math.multiply(fn(i), step));
      
            // update chart data 
            chartData.push({
              x: i,
              y: roundResult(fn(i))
            });
      
            myLabels.push(i.toFixed(step.toString().replace('.', '').length - 1));
          }
      
          // clear chart data if it contains any complex number
          if (typeof sumRct !== 'number') {
            removeChartData();
            hideCanvas();
            chartMsg.classList.remove('is-hidden');
          } else {
            chartMsg.classList.add('is-hidden');
          }
          
      
          return `Rectangle rule: ${roundResult(sumRct)}`
        }
      
        // functionality added due to math.js library
        const getInpFunc = inp => {
          const parser = math.parser();
          parser.evaluate(`f(x) = ${inp.value}`);
          return parser.get('f'); 
        };
      
      
        btn.addEventListener('click', () => {
          const errorMessage = document.querySelector('.error-message');
          errorMessage.classList.add('is-hidden');
          results.classList.add('is-hidden');
          cbInput.classList.remove('on-error');
          rangeInputFrom.classList.remove('on-error');
          rangeInputTo.classList.remove('on-error');
          stepInput.classList.remove('on-error');
          
          try {
            if (isChartCreated) {
              resetCanvas();
            };
            
            errorMessage.innerHTML = '';
            
            if (+rangeInputFrom.value > +rangeInputTo.value) {
                throw new Error('Range is not valid');
            } else if (+stepInput.value > +rangeInputTo.value - +rangeInputFrom.value &&
                       rangeInputTo.value &&
                       rangeInputFrom.value) {
                throw new Error('Step is not valid');
            }
      
            const argsArray = [getInpFunc(cbInput), 
              Number(stepInput.value), 
              Number(rangeInputFrom.value), 
              Number(rangeInputTo.value)
            ];   
            
            resultRct.innerHTML = integrateRct(...argsArray);
            
            results.classList.remove('is-hidden');
            
            changeBarChartColor();
      
            addChartData(createChart(cbInput), myLabels, chartData); 
            isChartCreated = true;
          } catch(err) {
            
            errorMessage.classList.remove('is-hidden');
            
            switch(true) {
              case err.message == 'Unexpected end of expression (char 8)' || err.message == 'Value expected (char 8)':
                errorMessage.innerHTML = 'You have to enter integrand!';
                cbInput.classList.add('on-error');
                break;
              case err.message.startsWith('Undefined symbol') || err.message.startsWith('Unexpected type of argument'):
                errorMessage.innerHTML = 'Intergrand is not valid!';
                cbInput.classList.add('on-error');
                break;
              case err.message == 'Range is not valid':
                errorMessage.innerHTML = `Range "to" must be greater than range "from"!`;
                rangeInputFrom.classList.add('on-error');
                rangeInputTo.classList.add('on-error');
                break;
              case err.message.includes(','):
                errorMessage.innerHTML = `Use '.' as decimal separator!`;
                cbInput.classList.add('on-error');
                break;
              case err.message == 'Step is not valid':
                errorMessage.innerHTML = 'Step must not be greater than range!';
                stepInput.classList.add('on-error');
                break;
              default:
                errorMessage.innerHTML = err.message;
                cbInput.classList.add('on-error');
                break;
            }
            console.log(err.message)
          }
           
        });
      
        function resetCanvas() {
          let oldEl = document.querySelector('#myChart');
          oldEl.parentNode.removeChild(oldEl);
          let newEl = document.createElement('canvas');
          newEl.setAttribute('id', 'myChart');
          document.querySelector('.chart-container').appendChild(newEl);
          canvas = document.querySelector('#myChart');
          ctx = canvas.getContext('2d');
        };
        
        function hideCanvas() {
          let canvas = document.querySelector('#myChart');
          canvas.style.display = "none";
        }  
        
      };
<?php echo '</script'; ?>
>
<?php }
}
