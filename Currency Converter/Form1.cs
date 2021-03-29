using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json.Linq;
using System.Windows.Forms;
using System.Net;

namespace Currency_Converter
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        private string[] getCurrency()
        {
            return new string[] { "EUR", "USD", "JPY", "IDR",
                "AUD", "CAD", "JPY", "SGD", "PHP", "MYR", "CNY" };
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            mataUang1Currency.Items.AddRange(getCurrency());
            mataUang2Currency.Items.AddRange(getCurrency());
            mataUang1Currency.SelectedItem = "USD";
            mataUang2Currency.SelectedItem = "IDR";
        }

        private void mataUang1Value_ValueChanged(object sender, EventArgs e)
        {

        }

        private void mataUang1Currency_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void mataUang2Value_ValueChanged(object sender, EventArgs e)
        {

        }

        private void mataUang2Currency_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void buttonConvert_Click(object sender, EventArgs e)
        {
            string url = string.Format("https://api.exchangeratesapi.io/latest?base={0}&symbols={1}",
                mataUang1Currency.SelectedItem, mataUang2Currency.SelectedItem);

            Console.WriteLine(url);

            dynamic res = JObject.Parse(new WebClient().DownloadString(url));

            float rate = (float)res.rates[mataUang2Currency.SelectedItem];
            mataUang2Value.Text = ((float)mataUang1Value.Value * rate).ToString("0.00");
        }
    }
}
