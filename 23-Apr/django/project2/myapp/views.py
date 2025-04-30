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

def tag_if(request):
    data = {
        'integer1' : 1,
        'flag' : True,
        'numbers' : [1, 2, 3],
    }
    return render(request, 'myapp/tag_if.html', data)

def tag_for(request):
    data = {
        'range1_5' : range(1,6),
        'colors' : ['red', 'green', 'blue'],
        'scores' : {'somsak' : 8, 'Adisak' : 10},
        'empty' : [],
    }
    return render(request, 'myapp/tag_for.html', data)