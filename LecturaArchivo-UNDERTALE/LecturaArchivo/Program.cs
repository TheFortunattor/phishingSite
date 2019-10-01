using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Threading.Tasks;

namespace LecturaArchivo
{
    class Program
    {
        static void Main(string[] args) {
            string num;
            do
            {
                int contador = 0; 

                System.Console.WriteLine("\nSi desea DETENER presione la tecla 1.");
                System.Console.WriteLine("Ingrese el numero que desea buscar: ");
                num = Console.ReadLine();
                if (int.Parse(num)!=1)
                {
                    try
                    {
                        using (StreamReader sr = new StreamReader(@"C:\Users\alumno\AppData\Local\UNDERTALE\file0"))
                        {
                            String line;
                            do
                            {

                                line = sr.ReadLine();
                                line = line.Replace(" ", "");
                                if (num == line)
                                {
                                    contador++;
                                }
                            } while ((line = sr.ReadLine()) != null);
                        }
                    }
                    catch (Exception)
                    {
                        Console.WriteLine("El archivo no se puede leer");
                    }

                    if (contador == 0)
                    {
                        System.Console.WriteLine("No se encontraron numeros del valor ingresado.");
                    }
                    else
                    {
                        System.Console.WriteLine("Se encontraron " + contador + " veces del numero " + num +".");
                    }
                }
                          
            } while (int.Parse(num)!=1);

            Console.ReadKey();
        }
        
    }
}