
namespace Currency_Converter
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.title = new System.Windows.Forms.Label();
            this.mataUang1Currency = new System.Windows.Forms.ComboBox();
            this.labelMataUang1 = new System.Windows.Forms.Label();
            this.mataUang1Value = new System.Windows.Forms.NumericUpDown();
            this.mataUang2Currency = new System.Windows.Forms.ComboBox();
            this.labelMataUang2 = new System.Windows.Forms.Label();
            this.buttonConvert = new System.Windows.Forms.Button();
            this.mataUang2Value = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.mataUang1Value)).BeginInit();
            this.SuspendLayout();
            // 
            // title
            // 
            this.title.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.title.AutoSize = true;
            this.title.Font = new System.Drawing.Font("Segoe UI", 14F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.title.Location = new System.Drawing.Point(267, 24);
            this.title.Name = "title";
            this.title.Size = new System.Drawing.Size(238, 32);
            this.title.TabIndex = 1;
            this.title.Text = "Currency Converter";
            this.title.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // mataUang1Currency
            // 
            this.mataUang1Currency.FormattingEnabled = true;
            this.mataUang1Currency.Location = new System.Drawing.Point(215, 120);
            this.mataUang1Currency.Name = "mataUang1Currency";
            this.mataUang1Currency.Size = new System.Drawing.Size(60, 28);
            this.mataUang1Currency.TabIndex = 2;
            this.mataUang1Currency.SelectedIndexChanged += new System.EventHandler(this.mataUang1Currency_SelectedIndexChanged);
            // 
            // labelMataUang1
            // 
            this.labelMataUang1.AutoSize = true;
            this.labelMataUang1.Location = new System.Drawing.Point(59, 98);
            this.labelMataUang1.Name = "labelMataUang1";
            this.labelMataUang1.Size = new System.Drawing.Size(94, 20);
            this.labelMataUang1.TabIndex = 3;
            this.labelMataUang1.Text = "Mata Uang 1";
            // 
            // mataUang1Value
            // 
            this.mataUang1Value.Location = new System.Drawing.Point(59, 121);
            this.mataUang1Value.Name = "mataUang1Value";
            this.mataUang1Value.Size = new System.Drawing.Size(150, 27);
            this.mataUang1Value.TabIndex = 4;
            this.mataUang1Value.ValueChanged += new System.EventHandler(this.mataUang1Value_ValueChanged);
            // 
            // mataUang2Currency
            // 
            this.mataUang2Currency.FormattingEnabled = true;
            this.mataUang2Currency.Location = new System.Drawing.Point(660, 120);
            this.mataUang2Currency.Name = "mataUang2Currency";
            this.mataUang2Currency.Size = new System.Drawing.Size(60, 28);
            this.mataUang2Currency.TabIndex = 2;
            this.mataUang2Currency.SelectedIndexChanged += new System.EventHandler(this.mataUang2Currency_SelectedIndexChanged);
            // 
            // labelMataUang2
            // 
            this.labelMataUang2.AutoSize = true;
            this.labelMataUang2.Location = new System.Drawing.Point(504, 98);
            this.labelMataUang2.Name = "labelMataUang2";
            this.labelMataUang2.Size = new System.Drawing.Size(94, 20);
            this.labelMataUang2.TabIndex = 3;
            this.labelMataUang2.Text = "Mata Uang 2";
            // 
            // buttonConvert
            // 
            this.buttonConvert.Location = new System.Drawing.Point(336, 163);
            this.buttonConvert.Name = "buttonConvert";
            this.buttonConvert.Size = new System.Drawing.Size(94, 29);
            this.buttonConvert.TabIndex = 5;
            this.buttonConvert.Text = "Convert";
            this.buttonConvert.UseVisualStyleBackColor = true;
            this.buttonConvert.Click += new System.EventHandler(this.buttonConvert_Click);
            // 
            // mataUang2Value
            // 
            this.mataUang2Value.AutoSize = true;
            this.mataUang2Value.Location = new System.Drawing.Point(504, 123);
            this.mataUang2Value.Name = "mataUang2Value";
            this.mataUang2Value.Size = new System.Drawing.Size(0, 20);
            this.mataUang2Value.TabIndex = 6;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 218);
            this.Controls.Add(this.mataUang2Value);
            this.Controls.Add(this.buttonConvert);
            this.Controls.Add(this.mataUang1Value);
            this.Controls.Add(this.labelMataUang2);
            this.Controls.Add(this.mataUang2Currency);
            this.Controls.Add(this.labelMataUang1);
            this.Controls.Add(this.mataUang1Currency);
            this.Controls.Add(this.title);
            this.Name = "Form1";
            this.Text = "Tugas 3 - PBKK - Currency Converter";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.mataUang1Value)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label title;
        private System.Windows.Forms.ComboBox mataUang1Currency;
        private System.Windows.Forms.Label labelMataUang1;
        private System.Windows.Forms.NumericUpDown mataUang1Value;
        private System.Windows.Forms.ComboBox mataUang2Currency;
        private System.Windows.Forms.Label labelMataUang2;
        private System.Windows.Forms.Button buttonConvert;
        private System.Windows.Forms.Label mataUang2Value;
    }
}

