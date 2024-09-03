using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace kredty
{
    /// <summary>
    /// Logika interakcji dla klasy MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            if (lblA.Text == "" || int.Parse(lblA.Text) <= 0 || lblB.Text == "" || int.Parse(lblB.Text) <= 0 || lblC.Text == "" || int.Parse(lblC.Text) <= 0)
            {
                MessageBox.Show("podaj prawidlowe dane");
            }

            int N = int.Parse(lblA.Text);
            int r = int.Parse(lblC.Text);
            int k = 12;
            int n = int.Parse(lblB.Text);

            double w = (N + r) / k * (1 - Math.Pow((k / (k + r)),n));
            txtBox.Text = w.ToString();
            
        }
    }
}
