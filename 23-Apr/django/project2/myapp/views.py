from django.shortcuts import render
from datetime import date

# Create your views here.

def index(request):
    return render(request, "myapp/index.html")

def about(request):
    return render(request, "myapp/about.html")

def test(request):
    dt = date.today 

    data = {
        'name': 'ต้มยำกุ้ง',
        'age': 1,
        'city': 'bangkok',
        'number': [1,2,3],
        'dept': {
            'ece': 'Electrical and Computer Engineering',
            'ie': 'Industrial Engineering',
        },
        'date': dt,
    }
    return render(request, 'myapp/test.html', data)

def plus(request):
    return render(request, "myapp/plus.html")
