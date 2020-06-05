class Calendar
{
    constructor(domTarget)
    {
       domTarget = domTarget || '.calendar';
       this.domElement = document.querySelector(domTarget);

       if(!this.domElement) throw "Calendar - L'élément spécifié est introuvable";

       this.monthList = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aôut', 'septembre', 'octobre', 'novembre', 'décembre');

       this.dayList = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');

       this.today = new Date();
       this.today.setHours(0,0,0,0);

       this.currentMonth = new Date(this.today.getFullYear(), this.today.getMonth(), 1);

       var header = document.createElement('div');
       header.classList.add('calendar-header');
       this.domElement.appendChild(header);

       this.content = document.createElement('div');
       this.domElement.appendChild(this.content);

       var previousButton = document.createElement('button');
       previousButton.setAttribute('data-action', '-1');
       previousButton.textContent = '\u003c';
       header.appendChild(previousButton);

       this.monthDiv = document.createElement('div');
       this.monthDiv.classList.add('month');
       header.appendChild(this.monthDiv);

       var nextButton = document.createElement('button');
       nextButton.setAttribute('data-action', '1');
       nextButton.textContent = '\u003e';
       header.appendChild(nextButton);

       this.domElement.querySelectorAll('button').forEach(element =>
       {
           element.addEventListener('click', () =>
           {
               this.currentMonth.setMonth(this.currentMonth.getMonth() * 1 + element.getAttribute('data-action') * 1);
               this.loadMonth(this.currentMonth);
           });
       });

       this.loadMonth(this.currentMonth);
    }

    loadMonth(date)
    {
       this.content.textContent = '';

       this.monthDiv.textContent = this.monthList[date.getMonth()].toUpperCase() + ' ' + date.getFullYear();

       for(var i=0; i<this.dayList.length; i++)
       {
           var cell = document.createElement('span');
           cell.classList.add('cell');
           cell.classList.add('day');
           cell.textContent = this.dayList[i].substring(0, 3).toUpperCase();
           this.content.appendChild(cell);
       }

       for(var i=0; i<date.getDay(); i++)
       {
           var cell = document.createElement('span');
           cell.classList.add('cell');
           cell.classList.add('empty');
           this.content.appendChild(cell);
       }

       var monthLength = new Date(date.getFullYear(), date.getMonth()+1, 0).getDate();

       for(var i=1; i<=monthLength; i++)
       {
           var cell = document.createElement('span');
           cell.classList.add('cell');
           cell.textContent = i;
           this.content.appendChild(cell);

           var timestamp = new Date(date.getFullYear(), date.getMonth(), i).getTime();

           if(timestamp === this.today.getTime())
           {
               cell.classList.add('today');
           }
       }
    }

}

const calendar = new Calendar('.calendar');
