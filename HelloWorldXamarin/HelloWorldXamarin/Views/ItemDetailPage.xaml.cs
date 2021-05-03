using System.ComponentModel;
using HelloWorldXamarin.ViewModels;
using Xamarin.Forms;

namespace HelloWorldXamarin.Views
{
    public partial class ItemDetailPage : ContentPage
    {
        public ItemDetailPage()
        {
            InitializeComponent();
            BindingContext = new ItemDetailViewModel();
        }
    }
}