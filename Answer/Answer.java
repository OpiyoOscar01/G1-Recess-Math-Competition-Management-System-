package com.G_1.Recess.MathCompMagtSyst.Answer;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "answers")
@Data

public class Answer {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long ansNo;
private String answer;
private Long qtnNo;
}
