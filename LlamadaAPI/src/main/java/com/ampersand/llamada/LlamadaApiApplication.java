package com.ampersand.llamada;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;


@Configuration
@ComponentScan("com.ampersand")
@SpringBootApplication
public class LlamadaApiApplication {

	public static void main(String[] args) {
		SpringApplication.run(LlamadaApiApplication.class, args);
	}

}
