from decimal import Decimal
from django.shortcuts import render, redirect
from database.models import Person, PersonFrom

# Create your views here.
def create_person(request):
    if request.method == 'POST':
        form = PersonFrom(request.POST)
        if form.is_valid():
            form.save()
    else:
        form = PersonFrom()
    data = {
        'form': form,
    }
    return render(request, 'database/create_person.html', data)

def read_person(request):
    persons = Person.objects.all()
    
    for person in persons:
        person.tax = f"{person.salary * Decimal('0.1'):.2f}" 
        #person.salary * Decimal('0.1')
        #ทศนิยม 2 ตำแหน่ง x 1 ตำแหน่ง = 3 ตำแหน่ง
      
    data = {
        'persons': persons,
    }
    return render(request, 'database/read_person.html', data)

def update_person(request, id):
    person = Person.objects.get(id=id)
    if request.method == 'POST':
        form = PersonFrom(request.POST, instance=person)
        if form.is_valid():
            form.save()
    else:
        form = PersonFrom(instance=person)
        
    data = {
        'form': form,
    }
    return render(request, 'database/update_person.html', data)

def delete_person(request, id):
    person = Person.objects.get(id=id)
    if request.method == 'POST':
        person.delete()
        return redirect('read_person')
    
    data = {
        'person': person,
    }
    return render(request, 'database/delete_person.html', data)