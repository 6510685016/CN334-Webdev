from django.db import models
from django import forms

# Create your models here.
class Person(models.Model):
    first_name = models.CharField(max_length=25)
    last_name = models.CharField(max_length=50)
    salary = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return f"{self.first_name } {self.last_name}"
    
class PersonFrom(forms.ModelForm):
    class Meta:
        model = Person
        fields = ['first_name', 'last_name', 'salary']
        lablels = {
            'first_name': 'First Name',
            'last_name': 'Last Name',
            'salary': 'Salary'
        }
    