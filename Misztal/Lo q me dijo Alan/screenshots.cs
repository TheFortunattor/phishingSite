/// <summary>
/// Genera una captura de pantalla completa  y la guarda en un directorio con un nombre personalizado
/// Espera además el formato de imágen
/// </summary>
/// <param name="filepath"></param>
/// <param name="filename"></param>
/// <param name="format"></param>
private void FullScreenshot(String filepath,String filename,ImageFormat format)
{
    Rectangle bounds = Screen.GetBounds(Point.Empty);
    using (Bitmap bitmap = new Bitmap(bounds.Width, bounds.Height))
    {
        using (Graphics g = Graphics.FromImage(bitmap))
        {
            g.CopyFromScreen(Point.Empty, Point.Empty, bounds.Size);
        }

        string fullpath = filepath + "\\" + filename;

        bitmap.Save(fullpath, format);
    }
}

// Usalo de la siguiente manera
FullScreenshot(Environment.GetFolderPath(Environment.SpecialFolder.Desktop), "screenshot.jpg", ImageFormat.Jpeg);
