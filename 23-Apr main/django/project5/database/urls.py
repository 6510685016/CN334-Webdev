from django.urls import path
from . import views

urlpatterns = [
    path('person/create/', views.create_person, name='create_person'),
    path('person/read/', views.read_person, name='read_person'),
    path('person/update/<int:id>/', views.update_person, name='update_person'),
    path('person/delete/<int:id>/', views.delete_person, name='delete_person'),
]
